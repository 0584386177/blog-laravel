<div class="row" id="table-without-card">
    <div class="col-12 my-2">
        <div class="col-sm-12 col-md-12 col-lg-12 ps-xl-75 ps-0 py-1">
            <div
                class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end align-items-center flex-sm-nowrap flex-wrap me-1">
                <div class="dt-buttons btn-group flex-wrap"><a class="btn add-new btn-primary mt-50"
                        href="{{route('admin.categories.add')}}">THÊM DANH MỤC</a> </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DANH MỤC</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                <span class="text-white">{{$category->id}}</span>
                            </td>


                            <td><span class="text-white" style="font-size:20px;">{{$category->name}}</span></td>

                            <td>
                                <div>
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="{{route('admin.categories.edit', $category->id)}}">

                                            <span>Edit</span>
                                        </a>
                                        <a class="dropdown-item" href="{{route('admin.categories.delete',$category->id)}}">

                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>