
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>MCDNS Invoice</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&family=Rubik:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">

	<style>
		* {
			color-adjust: exact;
			-webkit-print-color-adjust: exact;
			print-color-adjust: exact;
			font-family: 'Lexend', sans-serif;
		}



		.top-table {}

		.top-table .main-logo {
			width: 200px;
		}

		.top-table .main-logo img {
			max-width: 100%;
			height: auto;
		}

		.top-table .credit-details {
			text-align: end;
			vertical-align: middle;
		}

		.top-table .credit-details h4 {
			font-size: 18px;
			margin-top: 0px;
			margin-bottom: 8px;
		}

		.top-table .credit-details p:first-child {
			font-size: 50px;
			margin: 0;
			font-weight: 400;
		}

		.top-table .left-content {
			display: flex;
			gap: 25px;
			vertical-align: middle;
			align-items: center;
		}

		.top-table .address p {
			margin: 0px;
			margin-bottom: 5px;
			font-size: 13.5px;
			line-height: normal;
			font-weight: 500;
		}



		.invoice-box {
			max-width: 700px;
			margin: auto;
		}

		.invoice-box table {
			width: 100%;
			line-height: inherit;
			text-align: left;
		}
	</style>
</head>

<body>
	<div class="invoice-box"
		style="height: 98vh; display: flex; flex-direction: column; justify-content: space-between;">
		<table cellpadding="0" cellspacing="0">
			<tr class="top">
				<td>
					<table class="top-table">
						<tr>
							<td class="left-content">
								<div class="main-logo">
									<img src="{{ config('settings.site_logo') }}<" />
								</div>
							</td>

							<td class="credit-details">
								<h4 style="margin: 0; text-align:right;">{{ config('settings.site_title') }}</h4>
								{{-- <p style="margin: 5px 0;text-align:right;">42 Wallaby Way</p> --}}
								<p style="margin: 0;text-align:right;">{{ config('settings.s_address') }}</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="sub-title">
				<td>
					<p style="font-weight: 600; font-size: 18px; text-align: left; margin: 0; margin-bottom: 10px;">
						Invoice</p>
				</td>
			</tr>
			<tr class="information">
				<td>
					<table style="margin-bottom: 22px;">
						<tr>
							<td style="width: 250px; ">

								<table>
									<tr>
										<td>
											<p
												style="margin: 0px; padding-bottom: 6px; font-size: 14px; color : #000000; font-weight: 600; white-space: nowrap;">
												INVOICE #{{ $invoice->invoice_id }} </p>
										</td>
									</tr>
									<tr>
										<td style="
											font-size: 14px;">
											<!-- <p
												style="margin: 0px; padding-bottom: 6px; font-size: 14px; color : #000000; font-weight: 600;">
												INVOICE #50 </p> -->
											<p
												style="margin: 0px; padding-bottom: 6px; font-size: 14px; color : #acacac;">
												Created on:</p>
										</td>
										<td style="
											font-size: 14px;">
											<!-- <p style="margin: 0px; padding-bottom: 6px; font-size: 14px; color : #acacac; visibility: hidden; opacity: 0;">
												Created on:
											</p> -->

											<p
												style="margin: 0px; padding-bottom: 6px; font-size: 14px; color : #acacac;">
												{{ \Carbon\Carbon::parse($invoice->created_at)->format('m/d/Y') }}

											</p>
										</td>
									</tr>
								</table>
							</td>
							<td>
								<table style="width: 200px; margin-left: auto; text-align: end;">

									<tr>
										<td
											style="font-size: 14px; font-weight: 400; padding: 0px 0 6px 0px; color: #000000; text-transform: uppercase; font-weight: 600;text-align:right;">
											Bill To</td>
									</tr>
									<tr>
										<td
											style="font-size: 14px; font-weight: 400; padding: 0px 0 6px 0px; color: #acacac;text-align:right;">
											{{ $student->full_name }}</td>
									</tr>
									<tr>
										<td
											style="font-size: 14px; font-weight: 400; padding: 0px 0 6px 0px; color: #acacac;text-align:right;">
											{{ @$student->billingAddress->city }}, {{ @$student->billingAddress->state }}</td>
									</tr>
									<tr>
										<td
											style="font-size: 14px; font-weight: 400; padding: 0px 0 6px 0px; color: #acacac;text-align:right;">
											{{ @$student->billingAddress->post_code }}</td>
									</tr>
									<tr>
										<td
											style="font-size: 14px; font-weight: 400; padding: 0px 0 6px 0px; color: #acacac; white-space: nowrap;text-align:right;">
											{{ @$student->billingAddress->address }}</td>
									</tr>
									<!-- <tr>
										<td
											style="font-size: 14px; font-weight: 400; padding: 0px 0 6px 0px; color: #acacac;">
											VAT No. 432748038</td>
									</tr> -->

								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table class="content-table"
						style="margin-bottom: 10px; border-spacing: 0; border-bottom: 1px solid #e6e6e6;">
						<thead>
							<tr>
								<th style="margin: 0; padding: 0;">
									<p class="thead"
										style="margin : 0; background-color: #f2f2f2; color: #212529; border-radius: 5px 0px 0px 5px; padding: 15px 10px; font-weight: 400; text-transform: uppercase;text-align:left;">
										ITEM</p>
								</th>

								<th style="margin: 0; padding: 0;">
									<p class="thead"
										style="margin : 0; background-color: #f2f2f2; color: #212529; padding: 15px 10px; font-weight: 400; text-transform: uppercase; text-align: center;">
										QTY</p>
								</th>

								<th style="margin: 0; padding: 0;">
									<p class="thead"
										style="margin : 0; background-color: #f2f2f2; color: #212529; border-radius: 0px 5px 5px 0px; padding: 15px 10px; font-weight: 400; text-transform: uppercase;  text-align: center;">
										Total</p>
								</th>

							</tr>
						</thead>
						<tbody>
							@foreach ($invoice->items as $item)
							<tr>
								<td
									style="background-color: #fff; color: #acacac; padding: 5px; font-weight: 400; color: #000; padding: 20px 0px;">
									<h5 style="margin: 0px 0px 5px 0; font-size: 16px;">
										{{ $item->itemable->title }}
									</h5>
								</td>
								<td
									style="background-color: #fff; color: #acacac; padding: 5px; font-weight: 400; color: #000; padding: 20px 0px;  text-align: center;">
									{{ $item->quantity }}
								</td>
								<td
									style="background-color: #fff; color: #acacac; padding: 5px; font-weight: 400; color: #000; padding: 20px 0px;  text-align: center;">
									{{ $item->price }}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								<table style="max-width : 300px;margin-left: auto;">
									<tr>
										<td style="font-size : 15px; font-weight: 400; padding: 4px;">
											Subtotal
										</td>
										<td
											style="font-size : 15px; font-weight: 400; padding: 4px;text-align: right; color: #acacac;">
											$ {{ $invoice->total }}</td>
									</tr>
									<tr>
										<td style="font-size : 15px; font-weight: 400; padding: 4px;">
											Discount
										</td>
										<td
											style="font-size : 15px; font-weight: 400; padding: 4px;text-align: right; color: #acacac;">
											$ {{ $discount = $invoice->discount_amount ?? 0 }}</td>
									</tr>
									<tr>
										<td style="font-size : 15px; font-weight: 600; padding: 4px;">
											Total
										</td>
										<td
											style="font-size : 15px; font-weight: 600; padding: 4px;text-align: right; color: #000000;">
											$ {{ $invoice->total - $discount }}</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</body>

</html>