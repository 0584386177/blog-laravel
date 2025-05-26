<div class="row">
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">CẬP NHẬT DANH MỤC</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.categories.update',$category->id)}}" class="form form-horizontal">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="first-name">Tên Danh mục :</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" id="first-name" class="form-control" value="{{$category->name}}" name="category-name"
                                        placeholder="vd: Tin công nghệ,...">
                                    @error('category-name')
                                        <div class="text-danger
                                        ">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit"
                                class="btn btn-primary me-1 waves-effect waves-float waves-light">CẬP NHẬT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>