/**
 * The MIT License
 * Copyright (c) 2015 Estonian Information System Authority (RIA), Population Register Centre (VRK)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
package ee.ria.xroad.proxy;

import ee.ria.xroad.common.SystemProperties;
import ee.ria.xroad.common.conf.serverconf.ServerConfDatabaseCtx;
import ee.ria.xroad.common.conf.serverconf.model.ClientType;
import ee.ria.xroad.common.conf.serverconf.model.ServerConfType;
import ee.ria.xroad.common.conf.serverconf.model.ServiceType;
import ee.ria.xroad.common.conf.serverconf.model.WsdlType;
import ee.ria.xroad.common.identifier.ClientId;
import ee.ria.xroad.common.identifier.SecurityCategoryId;
import lombok.extern.slf4j.Slf4j;

/**
 * This class creates a test-database and starts the proxy main.
 */
@Slf4j
public final class TestProxyMain {

    static final String SERVER_CODE = "TestServer";

    static final String XROAD_INSTANCE = "XX";
    static final String MEMBER_CLASS = "FooClass";
    static final String MEMBER_CODE = "BarCode";

    static final String CLIENT_STATUS = "status";
    static final String CLIENT_CODE = "client";

    static final String WSDL_LOCATION = "wsdllocation";
    static final String WSDL_URL = "wsdlurl";

    static final String SERVICE_URL = "serviceUrl";
    static final String SERVICE_VERSION = "v1";
    static final String SERVICE_CODE = "serviceCode";
    static final String SERVICE_TITLE = "service";
    static final int SERVICE_TIMEOUT = 1234;

    static final String SECURITY_CATEGORY = "securityCategory";

    static final int NUM_CLIENTS = 5;
    static final int NUM_WSDLS = 2;
    static final int NUM_SERVICES = 4;

    private TestProxyMain() {
    }

    /**
     * Main program entry point.
     * @param args command-line arguments
     * @throws Exception in case of any errors
     */
    public static void main(String[] args) throws Exception {
        System.setProperty(
                SystemProperties.DATABASE_PROPERTIES,
                "src/test/resources/hibernate.properties");

        prepareTestDB();

        log.info("Starting proxy...");
        ProxyMain.main(args);
    }

    private static void prepareTestDB() throws Exception {
        log.info("Preparing test database...");

        final ServerConfType conf = new ServerConfType();
        conf.setServerCode(SERVER_CODE);

        for (int i = 0; i < NUM_CLIENTS; i++) {
            conf.getClient().add(createClient(conf, i));
        }

        ServerConfDatabaseCtx.doInTransaction(session -> {
            session.save(conf);
            return null;
        });
    }

    private static ClientType createClient(ServerConfType conf, int i) {
        ClientType client = new ClientType();
        client.setConf(conf);

        client.setIsAuthentication("NOSSL");

        if (i == 0) {
            client.setIdentifier(createTestClientId());
            conf.setOwner(client);
            return client;
        } else {
            client.setIdentifier(createTestClientId(client(i)));
            client.setClientStatus(CLIENT_STATUS + i);

            for (int j = 0; j < NUM_WSDLS; j++) {
                client.getWsdl().add(createWsdl(client, j));
            }

            // add acl ...
        }

        return client;
    }

    private static WsdlType createWsdl(ClientType client, int j) {
        WsdlType wsdl = new WsdlType();
        wsdl.setClient(client);
        wsdl.setUrl(WSDL_URL + j);
        wsdl.setWsdlLocation(WSDL_LOCATION + j);

        for (int k = 0; k < NUM_SERVICES; k++) {
            wsdl.getService().add(createService(wsdl, j, k));
        }

        return wsdl;
    }

    private static ServiceType createService(WsdlType wsdl, int j, int k) {
        ServiceType service = new ServiceType();
        service.setWsdl(wsdl);

        service.setTitle(SERVICE_TITLE + k);
        service.setServiceCode(service(j, k));
        service.setServiceVersion(SERVICE_VERSION);
        service.setUrl(SERVICE_URL + k);
        service.setTimeout(SERVICE_TIMEOUT);

        service.getRequiredSecurityCategory().add(SecurityCategoryId.create(
                XROAD_INSTANCE, SECURITY_CATEGORY + k));

        return service;
    }

    static ClientId createTestClientId() {
        return ClientId.create(XROAD_INSTANCE, MEMBER_CLASS, MEMBER_CODE);
    }

    static ClientId createTestClientId(String memberCode) {
        return ClientId.create(XROAD_INSTANCE, MEMBER_CLASS, memberCode);
    }

    static String client(int idx) {
        return CLIENT_CODE + "-" + idx;
    }

    static String service(int wsdlIdx, int serviceIdx) {
        return SERVICE_CODE + "-" + wsdlIdx + "-" + serviceIdx;
    }
}
