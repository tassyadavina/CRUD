<br>
@foreach ($employee as $employeelist)
<form action="{{ route('Employee.update',
$employeelist->employee_id) }}" method="post">

{{ csrf_field() }}
{{ method_field('PUT')}}
<br>
    <input type="text"
    name="txt_name"
    value="{{ $employeelist->employee_name }}" />
    <br>
    <input type="text"
    name="txt_address"
    value="{{ $employeelist->employee_address }}" />
    <br>
    <input type="text"
    name="txt_phone_number"
    value="{{ $employeelist->employee_phone_number }}" />
<br>
@endforeach
<br>
<button type="submit">Submit</button>
<a href="{{ url('Employee') }}" >
<br>
back
</a>
