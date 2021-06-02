import axios from "axios"

const ApiService = {
    ax: axios.defaults.baseURL = 'http://127.0.0.1:8000/api/'
}

export default ApiService;


export const EmployeeService = {
    get() {
        return axios.get(`employees`).catch(error => {
            throw new Error(`[RWV] ApiService::EmployeeService ${error}`);
        });
    }
}

export const StocksService = {
    get(id = "") {
        return axios.get(`stocks/${id}`).catch(error => {
            throw new Error(`[RWV] ApiService::StocksService ${error}`);
        })
    }
}


export const GisService = {
    get() {
        return axios.get('gis').catch(error => {
            throw new Error(`[RWV] ApiService::GisService ${error}`);
        })
    }
}