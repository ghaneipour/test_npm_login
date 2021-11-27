@section('page_main')

<!-- ___________________ Main text ______________________ -->
<div class=" p-5 w-100" dir="rtl">


<h3>
    {{App\Models\sitepage::getsitepage(['id_page'=>1,'page'=>'1'])->page_title}}
</h3>
<h5 class="lh-lg" style='text-align:justify;'>
    {{App\Models\sitepage::getsitepage(['id_page'=>1,'page'=>'1'])->page_str1}}
</h5>
</div>
<a id="products"></a>

@endsection