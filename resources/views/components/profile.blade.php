
<form method="post"  action="profile-store" class="container m-auto">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Purchases</h2>

           <div class="border-b border-gray-900/10 pb-12">
   
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="invoiceName" class="block text-sm/6 font-medium text-gray-900">Invoice name</label>
            <div class="mt-2">
              <input type="text" name="invoiceName" id="invoiceName" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" />
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="invoiceNumber" class="block text-sm/6 font-medium text-gray-900">Invoice number</label>
            <div class="mt-2">
              <input type="text" name="invoiceNumber" id="invoiceNumber" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" />
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="TransName" class="block text-sm/6 font-medium text-gray-900">Transaction Name</label>
            <div class="mt-2">
              <input id="TransName" name="TransName" type="TransName" autocomplete="TransName" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" />
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="TransNumber" class="block text-sm/6 font-medium text-gray-900">Transaction Number</label>
            <div class="mt-2">
              <input type="text" name="TransNumber" id="TransNumber" autocomplete="TransNumber" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" />
            </div>
          </div>

            <div class="sm:col-span-3 ">
            <label for="Price" class="block text-sm/6 font-medium text-gray-900">Price</label>
            <div class="mt-2">
              <input type="text" name="Price" id="Price" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" />
            </div>
          </div>
          <div class="sm:col-span-3 ">
            <label for="ProdName" class="block text-sm/6 font-medium text-gray-900">Product Name</label>
            <div class="mt-2">
              <input type="text" name="ProdName" id="ProdName" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" />
            </div>
          </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
              {{-- <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button> --}}
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </div>
      </div>
</form>