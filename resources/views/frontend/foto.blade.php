@extends('app.home')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}\plugins\glightbox\glightbox-call.js">

<div class="page-content">
        
    <div class="page-title page-title-small">
        <h2><a href="{{ route('beranda') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
        <a href="#" data-menu="menu-warning-1" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>
    
        <!--Menu Warning-->
    <!---------------->
    <!---------------->
    <div id="menu-warning-1" class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-height="10"
         data-menu-effect="menu-over">
         <h1 class="text-center mt-5 text-uppercase font-700">Log Out!</h1>
         <img class="mx-auto mb-3 text-center" src="{{ asset('frontend') }}/images/logopeda2.png" width="100">
        <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-700 bg-red-light">Log Out</a>
    </div>
    <!---------------->
    <!---------------->

    <div class="card card-style">
        <div class="content">
            <h4 class="mb-0">Galery Foto</h4>
            <p>
                Galery Foto Kegiatan Seriap hari
            </p>
        </div>

        <div class="card card-style bg-theme pb-0">
            <div class="content" id="tab-group-1">
                <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                    <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1">Day 1</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2">Day 2</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3">Day 3</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-4">Day 4</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-5">Day 5</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-6">Day 6</a>
                </div>
                <div class="clearfix mb-3"></div>
                <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1">

                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/10t.jpg" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/10t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/11t.jpg" title="Fruit Cookie Pie">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/11t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Designers Desk</h4>
                                    <p>With all the gadgets you'd ever wish for.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>		
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/28t.jpg" title="Plain Cookies and Flour">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/28t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Apple Watch</h4>
                                    <p>The perfect and small notification device.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>	
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/18t.jpg" title="Pots and Stuff">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/18t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">City Landscape</h4>
                                    <p>It's absolutely gorgeous, we'd love to see it live.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/14t.jpg" title="Delicious Strawberries">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/14t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Typography and iPhone 5</h4>
                                    <p>A beautifully captured snap with great contrast.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/15t.jpg" title="A Beautiful Camera">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/15t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class=" color-theme">Feather and Paper?</h4>
                                    <p>Going back to days when things were simplere.</p>
                                </div>
                            </a>			
                        </div>
                    </div>

                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2">

                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/10t.jpg" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/10t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/11t.jpg" title="Fruit Cookie Pie">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/11t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Designers Desk</h4>
                                    <p>With all the gadgets you'd ever wish for.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>		
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/28t.jpg" title="Plain Cookies and Flour">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/28t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Apple Watch</h4>
                                    <p>The perfect and small notification device.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>	
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/18t.jpg" title="Pots and Stuff">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/18t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">City Landscape</h4>
                                    <p>It's absolutely gorgeous, we'd love to see it live.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/14t.jpg" title="Delicious Strawberries">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/14t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Typography and iPhone 5</h4>
                                    <p>A beautifully captured snap with great contrast.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/15t.jpg" title="A Beautiful Camera">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/15t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class=" color-theme">Feather and Paper?</h4>
                                    <p>Going back to days when things were simplere.</p>
                                </div>
                            </a>			
                        </div>
                    </div>
                    
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3">

                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/10t.jpg" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/10t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/11t.jpg" title="Fruit Cookie Pie">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/11t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Designers Desk</h4>
                                    <p>With all the gadgets you'd ever wish for.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>		
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/28t.jpg" title="Plain Cookies and Flour">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/28t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Apple Watch</h4>
                                    <p>The perfect and small notification device.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>	
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/18t.jpg" title="Pots and Stuff">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/18t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">City Landscape</h4>
                                    <p>It's absolutely gorgeous, we'd love to see it live.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/14t.jpg" title="Delicious Strawberries">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/14t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Typography and iPhone 5</h4>
                                    <p>A beautifully captured snap with great contrast.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/15t.jpg" title="A Beautiful Camera">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/15t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class=" color-theme">Feather and Paper?</h4>
                                    <p>Going back to days when things were simplere.</p>
                                </div>
                            </a>			
                        </div>
                    </div>

                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-4">

                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/10t.jpg" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/10t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/11t.jpg" title="Fruit Cookie Pie">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/11t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Designers Desk</h4>
                                    <p>With all the gadgets you'd ever wish for.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>		
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/28t.jpg" title="Plain Cookies and Flour">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/28t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Apple Watch</h4>
                                    <p>The perfect and small notification device.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>	
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/18t.jpg" title="Pots and Stuff">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/18t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">City Landscape</h4>
                                    <p>It's absolutely gorgeous, we'd love to see it live.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/14t.jpg" title="Delicious Strawberries">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/14t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Typography and iPhone 5</h4>
                                    <p>A beautifully captured snap with great contrast.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/15t.jpg" title="A Beautiful Camera">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/15t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class=" color-theme">Feather and Paper?</h4>
                                    <p>Going back to days when things were simplere.</p>
                                </div>
                            </a>			
                        </div>
                    </div>

                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-5">

                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/10t.jpg" title="Vynil and Typerwritter">
                                <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/10t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/11t.jpg" title="Fruit Cookie Pie">
                                <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/11t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Designers Desk</h4>
                                    <p>With all the gadgets you'd ever wish for.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>		
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/28t.jpg" title="Plain Cookies and Flour">
                                <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/28t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Apple Watch</h4>
                                    <p>The perfect and small notification device.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>	
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/18t.jpg" title="Pots and Stuff">
                                <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/18t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">City Landscape</h4>
                                    <p>It's absolutely gorgeous, we'd love to see it live.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/14t.jpg" title="Delicious Strawberries">
                                <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/14t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Typography and iPhone 5</h4>
                                    <p>A beautifully captured snap with great contrast.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/15t.jpg" title="A Beautiful Camera">
                                <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/15t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class=" color-theme">Feather and Paper?</h4>
                                    <p>Going back to days when things were simplere.</p>
                                </div>
                            </a>			
                        </div>
                    </div>

                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-6">

                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/10t.jpg" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/10t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/11t.jpg" title="Fruit Cookie Pie">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/11t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Designers Desk</h4>
                                    <p>With all the gadgets you'd ever wish for.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>		
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/28t.jpg" title="Plain Cookies and Flour">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/28t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Apple Watch</h4>
                                    <p>The perfect and small notification device.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>	
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/18t.jpg" title="Pots and Stuff">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/18t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">City Landscape</h4>
                                    <p>It's absolutely gorgeous, we'd love to see it live.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/14t.jpg" title="Delicious Strawberries">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/14t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Typography and iPhone 5</h4>
                                    <p>A beautifully captured snap with great contrast.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                            <a data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/15t.jpg" title="A Beautiful Camera">
                                <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/15t.jpg" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class=" color-theme">Feather and Paper?</h4>
                                    <p>Going back to days when things were simplere.</p>
                                </div>
                            </a>			
                        </div>
                    </div>

                </div>
            </div>
        </div>   



    </div>


    
    <!-- footer and footer card-->
    <div class="footer" data-menu-load="menu-footer.html"></div>  
</div>    

@endsection