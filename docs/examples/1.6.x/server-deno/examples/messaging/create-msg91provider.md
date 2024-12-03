import { Client, Messaging } from "https://deno.land/x/appwrite/mod.ts";

const client = new Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('<YOUR_PROJECT_ID>') // Your project ID
    .setKey('<YOUR_API_KEY>'); // Your secret API key

const messaging = new Messaging(client);

const response = await messaging.createMsg91Provider(
    '<PROVIDER_ID>', // providerId
    '<NAME>', // name
    '<TEMPLATE_ID>', // templateId (optional)
    '<SENDER_ID>', // senderId (optional)
    '<AUTH_KEY>', // authKey (optional)
    false // enabled (optional)
);