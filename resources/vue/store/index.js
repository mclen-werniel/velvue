import { createStore } from "vuex";

import employee from './employee.module';
import gis from './gis.module';

const store = createStore({
    modules: {
        employee,
        gis
    },
});

export default store;