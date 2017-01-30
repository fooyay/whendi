<h2 align="center">Here's what people are saying:</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @for( $id = 0; $id < count($quotes); $id++ )
        <li data-target="#myCarousel" data-slide-to="{{ $id }}" {!! $id == 0 ? 'class="active"' : '' !!}></li>
        @endfor
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach( $quotes as $id => $quote )
        <div class="item{{ $id == 0 ? ' active' : '' }}">
            <h4>"{{ $quote[0] }}"<br>
                <span style="font-style:normal;">{{ $quote[1] }}</span></h4>
        </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>