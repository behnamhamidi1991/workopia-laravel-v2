<x-layout>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">Create Job Listing</h2>
        <form method="POST" action="/jobs" enctype="multipart/form-data">
            @csrf
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Job Info
          </h2>
    
         <x-inputs.text id="title" name="title" label="Job Title" placeholder="Software Engineer" :value="old('title')" />
    
         <x-inputs.text-area id="description" name="description" label=" Description" placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team. In this role, you will be responsible for designing, developing, and maintaining high-quality software solutions that meet our clients' needs. You will work closely with cross-functional teams to deliver robust applications and improve existing systems." :value="old('description')"  />
    
          <x-inputs.text id="salary" name="salary" label="Salary" type="number" placeholder="90000" :value="old('salary')" />
    
             
         <x-inputs.text-area id="requirements" name="requirements" label=" Requirements" placeholder="Bachelor's degree in Computer Science" rows="5" :value="old('requirements')"  />

         <x-inputs.text-area id="benefits" name="benefits" label="Benefits" placeholder="Health insurance, 401k, paid time off" rows="5" :value="old('benefits')"   />
    
   
    
          <x-inputs.text id="tags" name="tags" label="Tags (comma-separated)" type="text" placeholder="development,coding,java,python" :value="old('tags')"  />
    
        <x-inputs.select id="job_type" name="job_type" label="Job Type" value="{{old('job_type')}}" :options="['Full-Time' => 'Full-Time', 'Part-Time' => 'Part-Time', 'Contract' => 'Contract', 'Temporary' => 'Temporary', 'Internship' => 'Internship', 'Volunteer' => 'Volunteer', 'On-Call' => 'On-Call']" />

          <x-inputs.select 
          id="remote"
          name="remote"
          label="Remote"
          class="w-full px-4 py-2 border rounded focus:outline-none"
          :value="old('remote')" 
          :options="['0' => 'No', '1' => 'Yes']"
          />

          <x-inputs.text id="address" name="address" label="Address" type="text" placeholder="123 Main St" :value="old('address')"  />
    
          <x-inputs.text id="city" name="city" label="City" type="text" placeholder="Albany" :value="old('city')"  />
    
          <x-inputs.text id="state" name="state" label="State" type="text" placeholder="NY" :value="old('state')"  />

          <x-inputs.text id="zipcode" name="zipcode" label="Zipcode" type="text" placeholder="12201" :value="old('zipcode')" />
          
    
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Company Info
          </h2>

          <x-inputs.text id="company_name" name="company_name" label="Company Name" type="text" placeholder="Enter company name" :value="old('company_name')"  />

          <x-inputs.text-area id="company_description" name="company_description" label="Company Description" rows="3"  :value="old('company_description')"  />
    
    
          <x-inputs.text id="company_website" name="company_website" label="Company Website" type="url" placeholder="Company Website" :value="old('companyy_website')"   />

          <x-inputs.text id="contact_phone" name="contact_phone" label="Company Phone" type="text" placeholder="Enter phone" :value="old('contact_phone')"  />
    
          <x-inputs.text id="contact_email" name="contact_email" label="Company Email" type="email" placeholder="Enter Email" :value="old('contact_email')"  />
    
          <div class="mb-4">
            <label class="block text-gray-700" for="company_logo"
              >Company Logo</label
            >
            <input
              id="company_logo"
              type="file"
              name="company_logo"
              class="w-full px-4 py-2 border rounded focus:outline-none @error('company_logo') border-red-500 @enderror"
            />
            @error('company_logo')
            <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
          </div>
          
          <button
            type="submit"
            class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
          >
            Save
          </button>
        </form>
      </div>
</x-layout>