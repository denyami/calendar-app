<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Calendar</div>

                    <div class="card-body">
                        {{year}}年
                        {{month}}月
                        <table border="1">
                            <tr v-for="oneweek in Month">
                                <td v-for="oneday in oneweek">{{oneday}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        el: '#calendar',
        data: function() {
            const date = new Date();
            const year = date.getFullYear()
            const month = date.getMonth()+1
            const startDate = new Date(year,month-1, 1)
            const endDate = new Date(year,month, 0)
            const endDateCount = endDate.getDate()
            const startDay = startDate.getDay()
            const endDay = endDate.getDay()
            const dateList = [...Array(endDateCount).keys()].map(i => ++i)
            const lastMonthEndDate = new Date(year, month -1, 0)
            const lastMonthEndDateCount = lastMonthEndDate.getDate()
            var monthList = []
            var weekList = []
            var dayCount = 0
            var beforeMonthDay = []
            var daylist = ['日', '月', '火', '水', '木', '金', '土']
            
            monthList.push(daylist)
            for (let step = 0; step < startDay; step++){
                dateList.unshift(lastMonthEndDateCount - step)
            }
            for (var step = 1; step < 7 - endDay; step++){
                dateList.push(step)
            }

            for (var dt of dateList){
                dayCount++;
                weekList.push(dt)
                if (dayCount%7==0){
                    monthList.push(weekList)
                    weekList = []
                }
            }
            monthList.push(weekList)

            return {
                Month: monthList,
                year: year,
                month: month
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
