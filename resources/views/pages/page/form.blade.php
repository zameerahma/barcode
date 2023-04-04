<div class="form-group">
    <label for="name">Title</label>
    <input type="text" class="form-control" value="@if (isset($page->title)) {{ $page->title }}
        
    @endif" name="title" id="exampleFormControlInput1" placeholder="Ali...">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
    <textarea  name="description" id=""  cols="30" rows="10">@if (isset($page->description)) {{ $page->description }}
        
        @endif</textarea>
  </div>
  <div class="form-group">
    <label><strong>Page Content :</strong></label>
    <textarea class="ckeditor form-control"  name="content">@if (isset($page->content)) {{ $page->content }}
        
        @endif</textarea>
</div>
  <div class="form-group">
    <label for="exampleFormControlInput1">meta</label>
    <input type="text" class="form-control"value="@if (isset($page->meta)) {{ $page->meta }}
        
    @endif"  name="meta" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Headings</label>
    <input type="text" class="form-control" value="@if (isset($page->headings)) {{ $page->headings }}
        
    @endif"  name="headings" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group text-center">
  <button type="submit" class="btn btn-primary">@if (isset($page->title)) Update @else Submit
        
    @endif</button>
</div>