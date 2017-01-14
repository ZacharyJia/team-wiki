<template xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">空间列表</div>

                    <div class="panel-body">
                        <ul v-for="space in space_list">
                            <a v-bind:href="'/space/' + space.id" > {{ space.name }}</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                space_list: []
            }
        },
        mounted() {
                // GET /space
                this.$http.get('/space').then((response) => {
                    // success callback
                    this.space_list = response.data;
                }, (response) => {
                // error callback
            });
        }
    }
</script>
