 @if($data != null)
    <div class="form-group col-md-12" element="div" id="sub_category_wrapper">
        <label>Category (lvl 1)</label>
        <select name="sub_category" id="sub_category" class="form-control sub_category">
            <option value="">-</option>
            @foreach($data as $option)
                <option value="{{$option['id']}}">{{$option['name']}}</option>
            @endforeach

        </select>

    </div>
@endif
