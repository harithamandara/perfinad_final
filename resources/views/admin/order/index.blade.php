<x-admin-layout>
    <style>
        /* General container styling */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #f9fafb;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Heading styling */
        h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #1a202c;
        }

        /* Button styling */
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            font-weight: 600;
            border-radius: 0.375rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #3490dc;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #2779bd;
        }

        .btn-danger {
            background-color: #e3342f;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #cc1f1a;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Table styling */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
            text-align: left;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            background-color: #f1f5f9;
            font-weight: 700;
            color: #2d3748;
        }

        .table tbody tr:hover {
            background-color: #f9fafb;
        }

        .table tbody td {
            background-color: #fff;
            color: #4a5568;
        }

        /* Success message styling */
        .alert {
            padding: 1rem;
            margin-bottom: 1.5rem;
            border: 1px solid transparent;
            border-radius: 0.375rem;
        }

        .alert-success {
            color: #38a169;
            background-color: #f0fff4;
            border-color: #c6f6d5;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            .btn {
                width: 100%;
                justify-content: center;
                margin-bottom: 0.5rem;
            }

            .table th,
            .table td {
                padding: 0.5rem;
            }
        }

    </style>
    <div class="container">
<h1>New Orders</h1>
{{-- create button for old orders --}}

      <!-- Success Message -->
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      <!-- Products Table -->


      <!-- Orders Table -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Order ID
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Customer Name
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Order Date
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Total Price
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Status
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Action
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
          @foreach($orders as $order)
          <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
              <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $order->id }}</div>
            </td>
            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ $order->name }}
            </td>
            <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
              {{ $order->created_at }}
            </td>
            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
              Rs. {{ $order->total }}
            </td>
            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white" style="color: {{ $order->status == '0' ? 'red' : 'green' }}">
              {{ $order->status == '0' ? 'Pending' : 'Delivered' }}
            </td>
            <td class="py-4 pl-4 pr-3 text-sm font-medium">
              <div class="flex gap-3">
                <a href="{{ url('orderadmion/' . $order->id) }}" class="rounded-md px-4 py-2 text-sm font-semibold text-white transition-all duration-300" style="background-color: green">View</a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-admin-layout>
