@section('page_shop')
<!-- ______________________Shop__________________________ -->
<h3 dir=rtl class="align-middle m-2 p-2 align-self-center bg-dark text-light">{{App\Models\sitepage::getsitepage(['id_page'=>17,'page'=>'1'])->page_title}}</h3>
<h6 class="m-3" dir=rtl>{{App\Models\sitepage::getsitepage(['id_page'=>17,'page'=>'1'])->page_str1}}</h6>
<div class="  text-dark p-1 m-1 g-1" style="background:#6b7280;width:100%;border-radius:15px;">
    <div class="card-group1 bg-white p-1 m-1 g-1 text-center" style="border-radius:15px;">
        <?php

        $catlist = App\Models\goods::getCatListgood();
        foreach ($catlist as $catlist1 => $p) {
            if (str_contains($p, 'دسته اصلی')) {
            } else {
                if (!str_contains($p, ">")) {
                    echo "<div style='display:block;width:100%;' class='bg-light'>";
                    echo "<label for='id" . ($catlist1)  . "' class='text-dark p-2' ><h2>";
                    echo str_replace('<', '', str_replace('>', '', $p)) . "</h2></label><br>";
                    echo "</div>";
                } else {
                    $p2 = App\Models\goods::getCatListgood2($catlist1);
                    if ($p2->goods_done) {
                        $target_file = "./uploadgood/" . $catlist1 . ".png";
                        echo "<div class='card1 bg-white m-3 p-2 shadow'  style='display:inline-block;width:245px;border:1px solid #ececec;border-radius:15px; '>";
                        if (file_exists($target_file)) {
                            echo "<img class='card-img-top m-2 p-2' style=' height:170px;border-radius:15px;' 
                                src='../." . $target_file . "' alt='" . str_replace('<', '', str_replace('>', '', $p))  . "'>";
                        }
                        echo "  <div class='card-body'>";
                        echo '   <h5 class="card-title">' . str_replace('<', '', str_replace('>', '', $p))  . '</h5>';
                        echo "   <p class='card-text'>قیمت : " .  $p2->goods_price  . "تومان</p>";
                        echo '   <p class="card-text"><small class="text-muted">موجودی انبار : ' . $p2->goods_quanty . '</small></p>';
                        if ($p2->goods_discount > 0) {
                            echo '   <p class="card-text text-warning bg-primary">حراج : ' . $p2->goods_discount . ' تخفیف</p>';
                        }
                        echo ' <button class="btn btn-outline-info text-center" onclick="submitedr(' . $catlist1 . ')" >سفارش </button>';
                        echo "  </div>";
                        echo "</div>";
                    }
                }
            }
        }
        ?>
    </div>
</div>
<form action="shop" method="post" name="form1" id="form1">
    @csrf
    <input id='id' name='id' value=''>
</form>
<script>
    function submitedr(id) {
        document.getElementById('id').value = id;
        document.getElementById('form1').submit();
    }
</script>


@endsection