@admin
    @component('backend.link')
    @slot('link'){{ url('backend/admin') }}@endslot
    @slot('icon')icon fa fa-tachometer @endslot
    @slot('name')Dashboard @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/articles') }}@endslot
    @slot('icon')icon fa fa-pencil-square-o @endslot
    @slot('name')Custom Table @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/users') }}@endslot
    @slot('icon')icon fa fa-user @endslot
    @slot('name')Manage Users @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/orders') }}@endslot
    @slot('icon')icon fa fa-shopping-cart @endslot
    @slot('name')Orders @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/brands') }}@endslot
    @slot('icon')icon fa fa-th-large @endslot
    @slot('name')Brands @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/category') }}@endslot
    @slot('icon')icon fa fa-list @endslot
    @slot('name')Categories @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/subcategory') }}@endslot
    @slot('icon')icon fa fa-list-alt @endslot
    @slot('name')Subcategories @endslot
    @endcomponent
    @component('backend.dropdown')
    {!! Helper::setActive('products') !!}
    @slot('link'){{ url('backend/products') }}@endslot
    @slot('m_icon')icon fa fa-table @endslot
    @slot('m_name')Manage Catalog @endslot
    @slot('s_icon')icon fa fa-pencil-square-o @endslot
    @slot('s_name')Edit Products @endslot
    @endcomponent
@endadmin
@user
    @component('backend.link')
    @slot('link'){{ url('backend/user') }}@endslot
    @slot('icon')icon fa fa-tachometer @endslot
    @slot('name')User Dashboard @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/profile') }}@endslot
    @slot('icon')icon fa fa-eye @endslot
    @slot('name')User Profile @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/user-orders') }}@endslot
    @slot('icon')icon fa fa-money @endslot
    @slot('name')My Orders @endslot
    @endcomponent
@enduser