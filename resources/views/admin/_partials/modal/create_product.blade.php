<!-- Modal New -->
<div aria-labelledby="myModalLabel" class="modal fade" id="addNewProduct" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit
                </h4>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.product.store')}}" enctype="multipart/form-data" method="POST" role="form">
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">
                                Product Name
                            </label>
                            <input class="form-control" id="name" name="name" placeholder="Name of product" type="text" value="{{ old('name' )}}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="category_id">
                                Category
                            </label>
                            <select name="category_id">
                                @foreach ($all_categories as $category)
                                <option value="{{ $category->id}}">
                                    {{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">
                                Description
                            </label>
                            <textarea id="description" name="description" rows="8">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="unit">
                                Unit
                            </label>
                            <input class="form-control" id="unit" name="unit" placeholder="Enter Unit" type="text" value="{{ old('name' )}}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="price">
                                Price
                            </label>
                            <input class="form-control" id="price" name="price" placeholder="Enter Unit" type="number" value="{{ old('proce' )}}">
                            </input>
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input checked="" id="" name="is_hot" type="radio" value="0">
                                        No Hot
                                    </input>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input id="" name="is_hot" type="radio" value="1">
                                        Hot
                                    </input>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input checked="" id="" name="is_new" type="radio" value="0">
                                        No New
                                    </input>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input id="" name="is_new" type="radio" value="1">
                                        New
                                    </input>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">
                                Image
                            </label>
                            <input class="form-control" id="image" name="image" type="file">
                            </input>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>