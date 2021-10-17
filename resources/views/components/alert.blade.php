<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    I am Alert components {{$data}}
{{$selected}} ---
   <select>
   <option  value="1">
 option2
</option>
<option {{ $isSelected(1) ? 'selected' : '' }} value="2">
option1
</option>
   </select>

   <div {{ $attributes }}>
   Show attributes {{ $attributes['message'] }}
   {{ $attributes->get('message') }}
   {{$slot}}
</div>
