import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

import { initializeApp } from "firebase/app";
const firebaseCpnfig =
{
  "type": "service_account",
  "project_id": "valkyrier-68f32",
  "private_key_id": "21570c90ecfa916c623444b6faf4bf459e61fd17",
  "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC90b33OjOJ9r7z\nf97DqNoWBm7DbVpynOws/1W9ge086OnO7FTIE0heBH60PKSk9MG5Pg/8ZZL38O8g\n2av4oBPFh3doCvF9EdCt6S38n99fZKWnbe+g2UFrnwf7ckQeU5S+wm1ReaOHIUxX\nz3Yb0xUNjQxJ4PQa2U+jAOakGQyJEbf6vO3c6ABDlVPEz5+8MCEhwP+CBesI6ZNU\n52Rh86wgLs5NHzelBJm8n6//cNS7v9AXtaPjtui7duelslmfJDsgnslunOeQKHgx\n/FEDRQ4bNjjTh2PCwsw/XHEzy9M9a2zTctkDekPC6Qw6CLI+7+Fi/oZf2qF8K89F\nUKRkz6YJAgMBAAECggEAL3Lz285AbmMP6gHjj0DQ3TMX8oGOG7rWvcvI5MGK6lAl\ni/xfGBFb5GaWvpqvJG3rVBErwVGpupFPUUSgPJrVPmoFwuwDYBp5MdPpUy4qkeew\nkgkE3s4YEJ01C1mNphAKDWJAHd78be24rfWV5lAuQdApi3kwQ9rhEZPK06fQTp3B\nJs/1y0NKD2iI3m0xdsmTheoQi5GGD3Ea85kc/F6RUvf6HYsSnSw50q5ld3iYggE2\niJj/nTNurmRtL1NOEqNQuUUOcFrnNsKTarA7azGZRF3yPrxWL9UGRZq2l1fVXQ0X\n5/ENrCoLGyH2yON//Ok2PsVA30kHSoqnioBNW3JE5QKBgQDoJy31gzKAWTTAHlbg\nB0+RRiIp9U6u+Iw5sJMhKjZRt1Gg11AAXzMXQYE1OSrd0KG0Smgo1rzYJPFNlLmM\nndb6SYy9TVOwBT2xO0sDyxpXA1OmKMvT2uuWnLG+efbls1xPV92gbCqmx+oTJGTU\nrMOVhGhHE1uPxdeyzf1ZlaCe3QKBgQDRUVT2VsMV/rDAu9wV3E96phQE6nqF44V2\nKkuqpaMk60GJ3kFRw4+WsgsapyzdUQQC72FIvs292PX81KoxQ0WBLn1ROoeJ+ISd\ndoAzcsI/ZL/SRL5yS1sV00gWP1PhLy7NhUGl2W2Ot+bbwW1sk3CIHE3wwDGhSfld\np3w8fsxTHQKBgQDGh4LhGyJb6m2XAhsPGJFtzck3koWIUhsw1pTr3rp3JUsUPi03\nNDJv59/EETBcYqd2k88BZao3OVh2HQKUgwKuJanK1U8FD2ZToz4ib1UGJl0pkmfE\ns8mWkkfaeViv1LPTUnPAVeAfooTFe/ESgu/7dDDs31wE1o8AZPIM401prQKBgQCO\n2loI0QfNYAfTUaKPjM71Xpj1De3WqIOyNIV1jhu8m44cAIJFwhih+RrY8tUMqjj5\no9OaKRYTBhpDlgQdINMzqb2/DRnpkKE5MeGmuyBU0XaUk3QCXuloCMz+2fNuEJx5\niQNXo/9AUsQMoIMEgc9gJSkQMKrub6TvRNnmE4dxBQKBgDU0pPSBfPS5M5/x0xfs\nK8aoyT0cjQgbT7ttSYXVPEQ+NByLUon/1q1Vnc2T4Mx/LLEDwGrvFQAovLpc+7VU\nHkQyFiab6PdPWoKnS7+6cC+eqTvruNAFTcclJ2sqYTt1RR/i+VMjA9yj3fKZb6p1\ngYigh9N5V+oflS87davUkd1i\n-----END PRIVATE KEY-----\n",
  "client_email": "firebase-adminsdk-rqsib@valkyrier-68f32.iam.gserviceaccount.com",
  "client_id": "101254966015792982812",
  "auth_uri": "https://accounts.google.com/o/oauth2/auth",
  "token_uri": "https://oauth2.googleapis.com/token",
  "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
  "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-rqsib%40valkyrier-68f32.iam.gserviceaccount.com"
};

initializeApp(firebaseCpnfig);


createApp( App )
    .use( store )
    .use( router )
    .mount('#app');