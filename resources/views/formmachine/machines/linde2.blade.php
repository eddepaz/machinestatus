
<div class="mt-4">
    <h3>Linde 2</h3>
    <div >
      <input type="radio"  name="linde2" value="operative" id="operative-linde2" 
      @if (isset($recordStatus[13]->status))
      @if ($recordStatus[13]->status == 'Operativa')
      checked
      @endif
      @endif
      >
        <label for="operative-linde2" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde2" value="non-operative" id="non-operative-linde2" 
      @if (isset($recordStatus[13]->status))
      @if ($recordStatus[13]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-linde2" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde2" value="operative-wl" id="operative-wl-linde2" 
      @if (isset($recordStatus[13]->status))
      @if ($recordStatus[13]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-linde2" >{{ 'Operativa con Limitantes' }}</label>
    </div>
  
    <div>
      <input  type="text" class="form-control {{ $errors->has('linde2limitant')?'is-invalid':'' }} " name="linde2limitant" id="linde2limitant" value="{{isset($recordStatus[13]->limitant) ? $recordStatus[13]->limitant:old('limitant')}}">
    </div>
  </div>