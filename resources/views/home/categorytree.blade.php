@foreach($children as $subcategory)
    <div class="nav-item dropdown">
        @if(count($subcategory->children))
            <li style="color:  #000000;font-family: 'Arial Rounded MT Bold'"> {{$subcategory->title}}</li>
            <div class="dropdown-menu fade-up m-0">
                @include('home.categorytree',['children'=>$subcategory->children])
    </div>
            <hr>
    @else
            <li><a href="{{route('categoryservice',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
    @endif
            </div>
@endforeach


