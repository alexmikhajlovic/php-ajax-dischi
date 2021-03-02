let app = new Vue({

	el: '#app',
    data: {
        disks: [],
    },
    created() {

        axios
        .get('dispathcher.php', { params: {request: 'disks'} } )
        .then(result => {

            console.log(result)

            this.disks.push(...result.data);
            
            console.log(this.disks);
        })
        .catch(error => console.log('Error'));
    }
});