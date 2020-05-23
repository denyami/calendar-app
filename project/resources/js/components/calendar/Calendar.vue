<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Calendar</div>

                    <div class="card-body">
                        {{calendar}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            const weeks = ['Sun','Man','Tue','Wed','Thu','Fri','Sat']
            const date = new Date()
            const year = date.getFullYear()
            const month = date.getMonth() + 1
            const startDate = new Date(year, month -1, 1)
            const endDate = new Date(year, month, 0)
            const endDayCount = endDate.getDate()
            

            return{
                calendar: ['Day',weeks, date, year, month, startDate, endDate, endDayCount]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
