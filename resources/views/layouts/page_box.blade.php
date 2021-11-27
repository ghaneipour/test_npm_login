 
@section('page_box')
    <!-- ___________________________ box __________________________ -->
    <div>
        <div style="display:flex;flex-direction:column; padding:10px;">
            <div class="container ">
                <div class="row row-cols-2 row-cols-lg-5  row-cols-sm-3 g-2 g-lg-3">
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <center>

        <style>
            .h_iframe-aparat_embed_frame {
                position: relative;
            }

            .h_iframe-aparat_embed_frame .ratio {
                display: block;
                width: 100%;
                height: auto;
            }

            .h_iframe-aparat_embed_frame iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        <div class="h_iframe-aparat_embed_frame w-25">
            <span style="display: block;padding-top: 57%"></span>
            <iframe src="{{App\Models\sitepage::getsitepage(['id_page'=>1,'page'=>'1'])->page_url}}" allowFullScreen="true" id="mp2" webkitallowfullscreen="true" mozallowfullscreen="true">
            </iframe>
        </div>

        <a class="btn btn-success" onclick="openfile('r1');">vide01</a>
        <a class="btn btn-success" onclick="openfile('r2');">vide02</a>
        <a class="btn btn-success" onclick="openfile('r3');">vide03</a>
        <a class="btn btn-success" onclick="openfile('o1');">vide04</a>
        <a class="btn btn-success" onclick="openfile('o2');">vide05</a>
    </center>



    <script>
        function openfile(fn) {


            if (fn == 'r1') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>1,'page'=>'1'])->page_url}}";
            } else
            if (fn == 'r2') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>2,'page'=>'1'])->page_url}}";
            } else
            if (fn == 'r3') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>3,'page'=>'1'])->page_url}}";
            } else
            if (fn == 'o1') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>4,'page'=>'1'])->page_url}}";
            } else
            if (fn == 'o2') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>5,'page'=>'1'])->page_url}}";
            }
        }
    </script>
    @endsection