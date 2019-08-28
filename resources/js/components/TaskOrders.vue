<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                         <h3 class="card-title">Orders</h3>
                    </div>

                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Level</th>
                                  <th>Subject</th>
                                  <th>Deadline</th>
                                  <th>More</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr v-for="order in orders.data" :key="order.id">
                                  <td>{{order.name}}</td>
                                  <td>{{order.email}}</td>
                                  <td>{{order.level}}</td>
                                  <td>{{order.subject_name}}</td>
                                  <td>{{order.deadline_datetime}}</td>
                                  <td>
                                      <router-link :to="{path:'/orderdetails/'+ order.id}" type="button" class="btn btn-primary btn-sm">More</router-link>
                                  </td>
                                  <td>
                                      <a href="#" @click="deleteorder(order.id)">
                                        <i class="fa fa-pen p-1 text-danger"></i>
                                      </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                orders: {}
            }
        },
        methods:{
            getOrders(){
              axios.get("/api/task").then(({ data }) => ([this.orders = data]));
            },
        },
        created() {
            this.getOrders();
        }
    }
</script>
