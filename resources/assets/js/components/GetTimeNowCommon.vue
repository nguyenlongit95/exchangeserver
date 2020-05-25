<script>
    function getTimeUpdateTest() {
        let today = new Date();
        let timeUpdate = today.getHours() +":"+ today.getMinutes() + " " + today.getDate() + "-" + (today.getMonth()+1) + "-" + today.getFullYear();
        return timeUpdate;
    }
</script>
