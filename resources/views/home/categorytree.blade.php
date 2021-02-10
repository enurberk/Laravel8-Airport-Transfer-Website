@foreach($children as $subcategory)
    <ul>
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul>
                @include('home.categorytree',['children' => $subcategory->children])
            </ul>
        @else
            <li><a href="{{route('vehicles')}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
