<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous">
</script>


<script>
    function alert(type,msg){
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement("div");
        element.innerHTML = `
        <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
            <strong class="me-3">${msg}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `;
        document.body.append(element);
    }
</script>