<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if ($items->is_published)
                    Публик
                @else
                    Чернь
                @endif
            </div>
            <div class="card-body">
                <div class="card-title"></div>
                <div class="card-subtitle mb-2 text-muted"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#maindata" data-toggle="tab" class="nav-link active" role="tab">Основные данные</a>
                    </li>
                    <li class="nav-item">
                        <a href="#adddata" data-toggle="tab" class="nav-link" role="tab">Dop данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text"
                            name="title"
                            value="{{ $items->title }}"
                            id="title"
                            class="form-controll"
                            minlength="3"
                            required>
                        </div>
                        <div class="form-group">
                            <label for="content_raw">Статья</label>
                            <textarea name="content_raw"
                            rows="20"
                            id="content_raw"
                            class="form-controll">
                            {{ old('content_raw',$items->content_raw) }}
                            </textarea>
                        </div>
                    </div>

                    <div class="tab-pane active" id="adddata" role="tabpanel">
                        <div class="form-group">
                            <label for="category_id">Категория</label>
                            <select name="category_id"
                                id="category_id"
                                class="form-controll"
                                placeholder="Выберите категорияю"
                                required>
                                @foreach ($categoryList as $categoryOption)
                                <option value="{{ $categoryOption->id }}"
                                    @if ($categoryOption->id == $items->category_id) selected @endif>
                                        {{ $categoryOption->id_title }}

                                </option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Идентификатор</label>
                            <input name="slug" id="slug" class="form-controll" minlength="3" value="{{ $items->slug }}">
                        </div>

                        <div class="form-group">
                            <label for="excerpt">Выдержка</label>
                            <textarea name="excerpt" id="excerpt" class="form-controll" rows="3">
                                {{ old('excerpt',$items->excerpt) }}
                            </textarea>
                        </div>

                        <div class="form-check">
                            <input name="is_published" type="hidden" value="1">
                            <input class="form-check-input" name="is_published" type="checkbox" value="{{ $items->is_published }}"
                            @if ($items->is_publshed)
                                checked="checked"
                            @endif>
                            <label for="form-check-label" for="is_published">Опубликовано</label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
