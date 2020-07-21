@extends('main_layout')

@section('page_title') Blade view @endsection

@section('content_title')
    <h2>Hello world from my awesome site</h2>
@endsection

@section('content_intro')
    <p>This is a very crude example of templating with Blade.</p>
@endsection

@section('content_main')
    @foreach($passed_values as $key => $value)
        @if($key == 'title')
            <header>
                <h2>{{ $value }}</h2>
            </header>
        @elseif($key == 'data')
            <section>
                <nav>
                    <ul>
                        @foreach($value as $item)
                            <li><a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                        @endforeach
                    </ul>
                </nav>

                @foreach($value as $item)
                    @if($item['description'] !== '')
                        <article>
                            <h1>{{ $item['name'] }}</h1>
                            {!! $item['description'] !!}
                        </article>
                    @endif
                @endforeach
            </section>
        @endif
    @endforeach
@endsection

@section('content_footer')
    <footer>
        <p>Footer</p>
    </footer>
@endsection