@extends('layouts.app')
@section('main_content')
<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
  <!-- Breadcrumb Start -->
  <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
      Student Apply List
    </h2>

    <nav>
      <ol class="flex items-center gap-2">
        <li>
          <a class="font-medium" href="index.html">Dashboard /</a>
        </li>
        <li class="font-medium text-primary"> Student Apply List</li>
      </ol>
    </nav>
  </div>
  <!-- Breadcrumb End -->

  <div class="flex flex-col gap-5 md:gap-7 2xl:gap-10">
    <!-- ====== Data Table One Start -->
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
      <div class="data-table-common data-table-one max-w-full overflow-x-auto">


        <table class="table w-full table-auto" id="dataTableOne">
          <button id="downloadCsv"
            class="flex justify-between  float-right mx-2 my-2 mt-2 block rounded bg-primary px-2 py-1 text-xs font-medium text-white">
            Download CSV
          </button>
          <thead>
            <tr>
              <th>
                <div class="flex items-center gap-1.5">
                  <p>#Student ID</p>
                  <div class="inline-flex flex-col space-y-[2px]">
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                      </svg>
                    </span>
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                      </svg>
                    </span>
                  </div>
                </div>
              </th>
              <th>
                <div class="flex items-center gap-1.5">
                  <p>Name</p>
                  <div class="inline-flex flex-col space-y-[2px]">
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                      </svg>
                    </span>
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                      </svg>
                    </span>
                  </div>
                </div>
              </th>
              <th data-type="date" data-format="YYYY/DD/MM">
                <div class="flex items-center gap-1.5">
                  <p>Phone</p>
                  <div class="inline-flex flex-col space-y-[2px]">
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                      </svg>
                    </span>
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                      </svg>
                    </span>
                  </div>
                </div>
              </th>
              <th>
                <div class="flex items-center gap-1.5">
                  <p>Education</p>
                  <div class="inline-flex flex-col space-y-[2px]">
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                      </svg>
                    </span>
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                      </svg>
                    </span>
                  </div>
                </div>
              </th>

              <th>
                <div class="flex items-center gap-1.5">
                  <p>Payment Status</p>
                  <div class="inline-flex flex-col space-y-[2px]">
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                      </svg>
                    </span>
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                      </svg>
                    </span>
                  </div>
                </div>
              </th>

              <th>
                <div class="flex items-center gap-1.5">
                  <p>Status</p>
                  <div class="inline-flex flex-col space-y-[2px]">
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                      </svg>
                    </span>
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                      </svg>
                    </span>
                  </div>
                </div>
              </th>



              <th>
                <div class="flex items-center gap-1.5">
                  <p>Action</p>
                  <div class="inline-flex flex-col space-y-[2px]">
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                      </svg>
                    </span>
                    <span class="inline-block">
                      <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                      </svg>
                    </span>
                  </div>
                </div>
              </th>
            </tr>
          </thead>



          <tbody>

            @foreach ($students_apply as $item)

            <tr>
              <td>
                @foreach ($item->users as $user)
                {{$user->user_id}}
                @endforeach


              </td>
              <td>{{$item->engish_name}}</td>
              <td>
                {{$item->phone_number}}
              </td>
              <td>{{$item->exam_name}}</td>

              <td>
                @if ($item->payment_status == 'pending')
                <p class="text-center rounded-full bg-warning bg-opacity-10 px-3 py-1 text-sm font-medium text-warning">
                  Pending
                </p>
                @elseif($item->payment_status == 'reject')
                <p class="text-center rounded-full bg-danger bg-opacity-10 px-3 py-1 text-sm font-medium text-danger">
                  Reject
                </p>

                @elseif($item->payment_status == 'paid')
                <p class="text-center rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                  Paid
                </p>
                @endif

              </td>

              <td>
                @if ($item->status == 'pending')
                <p class="text-center rounded-full bg-warning bg-opacity-10 px-3 py-1 text-sm font-medium text-warning">
                  Pending
                </p>
                @elseif($item->status == 'reject')
                <p class="text-center rounded-full bg-danger bg-opacity-10 px-3 py-1 text-sm font-medium text-danger">
                  Reject
                </p>

                @elseif($item->status == 'accept')
                <p class="text-center rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                  Accept
                </p>
                @endif
              </td>

              {{-- action --}}
              <td>
                <div class="flex items-center text-center space-x-3.5">
                  <button class="hover:text-primary">
                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.20624 8.99981 3.20624C14.5686 3.20624 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.5562 8.99981 13.5562C13.1061 13.5562 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.44374 8.99981 4.44374C4.89356 4.44374 2.4748 7.95936 1.85605 8.99999Z"
                        fill="" />
                      <path
                        d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 7.875C8.38125 7.875 7.875 8.38125 7.875 9C7.875 9.61875 8.38125 10.125 9 10.125C9.61875 10.125 10.125 9.61875 10.125 9C10.125 8.38125 9.61875 7.875 9 7.875Z"
                        fill="" />
                    </svg>
                  </button>
                  <button class="hover:text-primary">
                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_652_20634)">
                        <path
                          d="M12.5391 0.78125H11.3438C10.4063 0.78125 9.63281 1.55469 9.63281 2.49219V11.8906C9.63281 11.9609 9.65625 12.0313 9.70313 12.1016L11.4141 14.9141C11.5313 15.1016 11.7422 15.2188 11.9766 15.2188C12.2109 15.2188 12.4219 15.1016 12.5391 14.9141L14.25 12.1016C14.2969 12.0313 14.3203 11.9609 14.3203 11.8906V2.49219C14.25 1.55469 13.4766 0.78125 12.5391 0.78125ZM11.3438 1.60156H12.5391C13.0312 1.60156 13.4297 2 13.4297 2.49219V3.28906H10.4531V2.49219C10.4531 2 10.8516 1.60156 11.3438 1.60156ZM11.9297 14.2344L10.4297 11.7734V4.10938H13.4062V11.7734L11.9297 14.2344Z"
                          fill=""></path>
                        <path
                          d="M5.27344 0.804688H2.10938C1.35938 0.804688 0.75 1.41406 0.75 2.16406V13.8594C0.75 14.6094 1.35938 15.2188 2.10938 15.2188H5.27344C6.02344 15.2188 6.63281 14.6094 6.63281 13.8594V2.16406C6.60938 1.41406 6 0.804688 5.27344 0.804688ZM5.78906 13.8359C5.78906 14.1172 5.55469 14.375 5.25 14.375H2.10938C1.82813 14.375 1.57031 14.1406 1.57031 13.8359V12.8047C1.59375 12.8047 1.64062 12.8281 1.6875 12.8281H3.42188C3.65625 12.8281 3.84375 12.6406 3.84375 12.4063C3.84375 12.1719 3.65625 11.9844 3.42188 11.9844H1.6875C1.64062 11.9844 1.61719 11.9844 1.57031 12.0078V10.5078C1.59375 10.5078 1.64062 10.5313 1.6875 10.5313H2.20312C2.4375 10.5313 2.625 10.3438 2.625 10.1094C2.625 9.875 2.4375 9.6875 2.20312 9.6875H1.6875C1.64062 9.6875 1.61719 9.6875 1.57031 9.71094V8.23438C1.59375 8.23438 1.64062 8.25781 1.6875 8.25781H3.42188C3.65625 8.25781 3.84375 8.07031 3.84375 7.83594C3.84375 7.60156 3.65625 7.41406 3.42188 7.41406H1.6875C1.64062 7.41406 1.61719 7.41406 1.57031 7.4375V5.9375C1.59375 5.9375 1.64062 5.96094 1.6875 5.96094H2.20312C2.4375 5.96094 2.625 5.77344 2.625 5.53906C2.625 5.30469 2.4375 5.11719 2.20312 5.11719H1.6875C1.64062 5.11719 1.61719 5.11719 1.57031 5.14063V3.64063C1.59375 3.64063 1.64062 3.66406 1.6875 3.66406H3.42188C3.65625 3.66406 3.84375 3.47656 3.84375 3.24219C3.84375 3.00781 3.65625 2.84375 3.42188 2.84375H1.6875C1.64062 2.84375 1.61719 2.84375 1.57031 2.86719V2.16406C1.57031 1.88281 1.80469 1.625 2.10938 1.625H5.27344C5.55469 1.625 5.8125 1.85938 5.8125 2.16406V13.8359H5.78906Z"
                          fill=""></path>
                      </g>
                      <defs>
                        <clipPath id="clip0_652_20634">
                          <rect width="15" height="15" fill="white" transform="translate(0 0.5)"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </button>
                  <button class="hover:text-primary">
                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z"
                        fill="" />
                      <path
                        d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z"
                        fill="" />
                      <path
                        d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z"
                        fill="" />
                      <path
                        d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z"
                        fill="" />
                    </svg>
                  </button>

                </div>
              </td>
            </tr>
            @endforeach


          </tbody>
        </table>
      </div>
    </div>
    <!-- ====== Data Table One End -->
    <script>
      document.getElementById('downloadCsv').addEventListener('click', function () {
    let csv = 'Student ID,Name,Phone,Education,Payment Status, Status\n';
    document.querySelectorAll('#dataTableOne tbody tr').forEach(row => {
        const cells = row.querySelectorAll('td');
        csv += `${cells[0].innerText},${cells[1].innerText},${cells[2].innerText},${cells[3].innerText},${cells[4].innerText},${cells[5].innerText}\n`;
    });

    const hiddenElement = document.createElement('a');
    hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
    hiddenElement.target = '_blank';
    hiddenElement.download = 'students_apply_list.csv';
    hiddenElement.click();
});

    </script>

  </div>
</div>
@endsection