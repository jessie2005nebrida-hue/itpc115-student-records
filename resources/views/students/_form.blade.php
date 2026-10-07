@csrf

<label>Student Number
<input name="student_number" value="{{ old('student_number', $student->student_number ?? '') }}" required>
</label>
@error('student_number') <p style="color:red">{{ $message }}</p> @enderror

<br><br>

<label>First Name
<input name="first_name" value="{{ old('first_name', $student->first_name ?? '') }}" required>
</label>
@error('first_name') <p style="color:red">{{ $message }}</p> @enderror

<br><br>

<label>Last Name
<input name="last_name" value="{{ old('last_name', $student->last_name ?? '') }}" required>
</label>
@error('last_name') <p style="color:red">{{ $message }}</p> @enderror

<br><br>

<label>Course
<input name="course" value="{{ old('course', $student->course ?? '') }}" required>
</label>
@error('course') <p style="color:red">{{ $message }}</p> @enderror

<br><br>

<button type="submit">{{ $buttonText }}</button>