@php
    /** @var \App\Models\News $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="card-title"></div>
                    <div class="card-subtitle mb-2 text-muted"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Основные данные</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#add_data" role="tab">Дополнительные данные</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="maindata" role="tabpanel">
                            <div class="form-group">
                                <label for="title">Заголовок</label>
                                <h3 id ="title"> {{ $item->title }}</h3>

                            </div>
                            <div class="form-group">
                                <label for="content_raw">Статья</label>
                                <div >

                                         {{ old('content_raw', $item->content_raw) }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="add_data" role="tabpanel">
                            <div class="form-group">

                                <select name="category_id"
                                        id="category_id"
                                        class="form-control"

                                        required>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="slug">Идентификатор</label>
                                <h3> {{ $item->slug }}</h3>


                            </div>
                            <div class="form-group">
                                <div>{{ old('excerpt', $item->excerpt) }}</div>
                            </div>
                            <div class="form-check">
                                <input name="is_published"
                                       type="hidden"
                                       value="0"
                                >
                                <input name="is_published"
                                       type="checkbox"
                                       class="form-check-input"
                                       value="1"
                                       @if($item->is_published)checked="checked"@endif
                                >
                                <label class="form-check-label" for="is_published">Опубликовано</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
