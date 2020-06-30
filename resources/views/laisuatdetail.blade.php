@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    @include('layouts.ads_ngang')
    <!-- End Banner -->

    <div id="app">
        <lai-suat-component></lai-suat-component>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>

    <!-- Start Banner -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_title">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti cum, temporibus tempora soluta assumenda est, veritatis asperiores possimus placeat quis nesciunt fugiat officiis ipsa quae, unde facere eos recusandae sapiente?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit eos ipsum dignissimos voluptatem voluptatibus quod magni vel distinctio asperiores quibusdam esse consequuntur ut amet excepturi labore, delectus voluptates hic consequatur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, non ad. Molestiae velit nemo minus, tempora saepe accusantium exercitationem, natus sint sapiente officiis doloribus assumenda minima ea suscipit, autem optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit unde vel inventore nisi culpa libero perspiciatis placeat corrupti, maxime consequatur tenetur suscipit consectetur molestiae delectus necessitatibus excepturi eius doloremque voluptates?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, id? Maxime, hic animi sit nulla voluptatibus non dolores quam amet reiciendis rem doloribus ducimus molestias sequi temporibus quasi dolorum soluta.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
@endsection
<script>
    /**
     * JS more detail
     * Can using jQuery here
     */
</script>
