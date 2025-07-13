import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";

// Initialize Firebase from environment variables
const firebaseConfig = window.firebaseConfig || {};
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

export { app, analytics };