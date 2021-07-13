<footer class="footer">
    <p>Copyright 2021©</p>
    <p>Create by Evgen</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function (){
        $(".add-to-cart").click(function (){
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data){
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>