@extends('CMS.main')
@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Menu
                    <small>List</small>
                </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 40%">Menu Name</th>
                                <th style="width: 10%">Created Date</th>
                                <th style="width: 10%">Updated Date</th>
                                <th style="width: 15%">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($menus as $key => $menu)

                                <tr>
                                    <td style="width: 5%">{{$key+1}}</td>
                                    <td style="width: 40%">
                                        <a>{{$menu->title}}</a>
                                    </td>
                                    <td style="width: 10%">
                                        <small>{{$menu->created_at}}</small>
                                    </td>
                                    <td style="width: 10%">
                                        <small>{{$menu->updated_at}}</small>
                                    </td>
                                    <td style="width: 15%">
                                        <a href="{{route('CMS.menu.edit', $menu->id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                        <a href="{{route('CMS.menu.delete', $menu->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                @foreach(\App\Models\SubMenus::where('menu_id',$menu->id)->get() as $key2 => $subs)
                                    <tr>
                                        <td style="width: 5%">{{$key+1}}.{{$key2+1}}</td>
                                        <td style="width: 40%">
                                            <a>{{$subs->title}}</a>
                                        </td>
                                        <td style="width: 10%">
                                            <small>{{$subs->created_at}}</small>
                                        </td>
                                        <td style="width: 10%">
                                            <small>{{$subs->updated_at}}</small>
                                        </td>
                                        <td style="width: 15%">
                                            <a href="{{route('CMS.menu.edit_sub', $subs->id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit
                                            </a>
                                            <a href="{{route('CMS.menu.delete_sub',$subs->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
                                                Delete </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                        <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection('content')
