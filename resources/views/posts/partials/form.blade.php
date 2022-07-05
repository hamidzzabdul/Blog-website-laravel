<div class="post-submission">
    <div class="post-wrapper">
        <label for="">Add Picture</label>
        <input class="postimg-input" type="file" name="thumbnail">
        <label for="">Choose Category</label>
        <select name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <label for="">Title</label>
        <input class="title" type="text" name="title" placeholder="Enter title..." value="{{ old('title', optional($post ?? null)->title) }}">
        <label for="" class="post-info">Article</label>
        <textarea id="#mytextarea" name="content" cols="30" rows="10" placeholder="Write you post here...">{{ old('content', optional($post ?? null)->content) }}</textarea>
        <button class="submit-post" type="submit">Submit</button>
    </div>
</div>