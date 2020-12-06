import axios from "axios";

export default axios.create({
    baseURL: 'http://test-laravel.loc/api/',
    timeout: 1000,
    headers: {'Content-Type': 'application/json'}
});

