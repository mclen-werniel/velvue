import {
    EmployeeService
} from '../common/api.service';

const employeeModule = {
    state: () => ({
        employees: {},
     }),
    mutations: {
        setEmployees(state, employees) {
            var emps = [];

            employees.forEach(element => {
                var emp = {}
                emp = element
                emp.projected_share_values = {}
                emp.projected_share_values.first_year = {}
                emp.projected_share_values.second_year = {}
                emp.projected_share_values.third_year = {}
                emp.projected_share_values.total_value = {}
                
                emp.projected_share_values.first_year.min = ((element.position[0].salary[0].salary * 0.05) * 30.00).toFixed(2)
                emp.projected_share_values.first_year.max = ((element.position[0].salary[0].salary * 0.10) * 30.00).toFixed(2)

                emp.projected_share_values.second_year.share_value = Number(30 + (30 * 0.05))
                emp.projected_share_values.second_year.min = ((element.position[0].salary[0].salary * 0.05) * emp.projected_share_values.second_year.share_value.toFixed(2)).toFixed(2)
                emp.projected_share_values.second_year.max = ((element.position[0].salary[0].salary * 0.10) * emp.projected_share_values.second_year.share_value.toFixed(2)).toFixed(2)

                emp.projected_share_values.third_year.share_value = (emp.projected_share_values.second_year.share_value + (emp.projected_share_values.second_year.share_value * 0.05)).toFixed(2)
                emp.projected_share_values.third_year.min = ((element.position[0].salary[0].salary * 0.05) * emp.projected_share_values.third_year.share_value).toFixed(2)
                emp.projected_share_values.third_year.max = ((element.position[0].salary[0].salary * 0.10) * emp.projected_share_values.third_year.share_value).toFixed(2)

                emp.projected_share_values.total_value.min = Number(emp.projected_share_values.first_year.min) + Number(emp.projected_share_values.second_year.min) + Number(emp.projected_share_values.third_year.min)
                emp.projected_share_values.total_value.max = Number(emp.projected_share_values.first_year.max) + Number(emp.projected_share_values.second_year.max) + Number(emp.projected_share_values.third_year.max)
                
                emps.push(emp)
            });

            state.employees = emps;
        },
        resetModuleState() {
            for (let f in state) {
                this.set(state, f, initialState[f]);
            }
        }
    },
    actions: {
        async fetchEmployees(context) {
            const {data} = await EmployeeService.get();
            context.commit('setEmployees', data);
            return data;
        }
    },
    getters: {
        employees(state) {
            return state.employees
        }
    }
}

export default employeeModule;