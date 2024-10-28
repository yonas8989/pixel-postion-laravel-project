<x-layout>
    <x-page-heading>
        Create Job
    </x-page-heading>
    <x-forms.form method='POST' action="/jobs " enctype="multipart/form-data">
        <x-forms.input label="Title" name="title" placeholder="Job Title" />
        <x-forms.input label="Salary" name="salary" placeholder="Salary" />
        <x-forms.input label="Location" name="location" placeholder="Location" />
        <x-forms.input label="URL" name="url" placeholder="http://yonasfikadie@gmail.com" />
        <x-forms.input label="tags(comma separated)" name="tags" placeholder="laracasts, video, education" />
        <x-forms.select label="Schedule" name="schedule">
            <option > Part time</option>
            <option > full time</option>
        </x-forms.select>
        <x-forms.divider/>
        <x-forms.checkbox name="featured"  label="Feature(Costs Extra)">
        </x-forms.checkbox>
        <x-forms.button>publish </x-forms.button>
    </x-forms.form>
</x-layout>

