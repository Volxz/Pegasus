@extends('layouts.app')

@section('content')
<style>
    .name {
        color: #878088;
        font-style: italic;
        font-size: 10px;
    }

    .fade-content {

        height: 200px;
        padding: 5px;
        position: relative;

        overflow: hidden;
    }

    .fade-curtain {
        width: 100%;
        height: 60%;
        position: absolute;
        bottom: 0;

        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,ffffff+100&amp;0+0,1+80 */
        background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgb(230, 230, 230) 80%, rgb(230, 230, 230) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%, rgb(230, 230, 230) 80%, rgb(230, 230, 230) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%, rgba(230, 230, 230, 0.83) 80%, rgb(230, 230, 230) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
    }

</style>
<div class="background mh2">
    {{--<img src="../img/404.png" width="800px" height="210px" class="logo center-block">--}}
    <h1 class="text-center align-middle mainheader">Recent Work</h1>


</div>

<br><br><br>
<div class="container">
    <div class="row">
        <h1>Recent Work</h1>
        <hr style="border-top: 1px solid #292929;">
        <h3 class="text-center">Title</h3>


        <p class="name">Student Name</p>
        <p class="name">Date: Date</p>
        <hr style="border-top: 1px solid #0e3d08;">

        <div class="fade-content">

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat sem nec nunc laoreet luctus.
                Aliquam consequat, ligula sit amet facilisis condimentum, magna nibh ultricies purus, quis semper ante
                orci id magna. Etiam vulputate sed nulla sed bibendum. Maecenas pellentesque dapibus finibus. Ut mi
                orci, tempus non magna sit amet, ultrices fringilla lacus. Pellentesque dapibus elit a nibh accumsan, at
                posuere dui mollis. Nunc nec scelerisque quam. Aenean varius aliquam nulla, vel viverra felis dictum in.
                Maecenas vitae porttitor est. Praesent placerat felis a lectus efficitur, id tincidunt quam vehicula.
                Suspendisse eget tincidunt neque, sed efficitur eros. Integer sapien quam, maximus ac quam at, varius
                vulputate arcu. Suspendisse dignissim dolor sed dui dignissim mattis. Aliquam pulvinar dolor sapien, ut
                posuere est interdum vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                cubilia Curae;

                Vestibulum sodales porta nunc, at imperdiet libero posuere nec. Fusce quis mauris purus. Vestibulum
                ullamcorper nisi vitae ultricies porttitor. Nam nec libero laoreet, vulputate est sed, vehicula sapien.
                Duis at finibus ex. Aliquam maximus ipsum nec eleifend dictum. Nunc id finibus tortor. Pellentesque elit
                enim, egestas non lacinia quis, congue quis risus. Suspendisse potenti. Aliquam erat volutpat. Nulla
                tristique justo sollicitudin pharetra congue. Aenean vestibulum erat vitae pellentesque sodales. Duis
                viverra tincidunt sem at finibus. Proin tempus vestibulum auctor. Nullam ac purus nibh.</p>


            <div class="fade-curtain"></div>


        </div>
        <a href="#"><button class="sec center-block">Read More</button></a>
    </div>
</div>
@endsection