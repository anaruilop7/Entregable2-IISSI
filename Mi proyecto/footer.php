<hr>
<p class="footer" id="footer">© scatto - </p>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

<script>
    let currentYear = new Date().getFullYear();
    let footer = document.getElementById("footer");
    footer.innerHTML += currentYear;
</script>