Parameters:
     Payment:
                show in money. [property Money]
                show in miles. [property Miles]

     From:
                LEX. [if Money]
                SDF. [if Miles]
                invalid departure.        [error]

     To:
                DAB. [if Miles]
                EWR. [if Money]
                ATL.
                invalid arrival.        [error]

	Number of Passengers:
                9.
			1.
			3.
			6.
			0.	[error]
	Dates:
			Wed, Apr 5 - Sun, May 5.
			Wed, Apr 5 - Thu, Mar 5.
			Sun, May 5 - Thu, Mar 5.
			Wed, Mar 4 - Thu, Mar 5.
			Sun, May 5 - Wed, Apr 5.	[error]

#	Meeting Event Code: 
#		12345.	[if Money]
#		ABCDE.	[if Money]
#		A.		[error]
#		AA.		[error]

	Flexible Dates:
			Flexible Dates.		[if Money] [property FlexDate]
			Not Flexible Dates.	[if Money]
	
	Flex_sub:
			Flexible Days.		[if FlexDate]
			5 Weeks.			[if FlexDate]

	Refundable Flights:
                selected.      [if Money]
                not selected.  [if Money]
	Show Best Fares For:
			Basic Economy. [if Miles]
			Main Cabin. [if Miles]
			Delta Comfort+. [if Miles]
			First Class. [if Miles]
			Premium Select. [if Miles]
		

	Fair Class:
			Basic Economy E (or higher). [if Money]
			Main Cabin V (or higher). [if Money]
			Delta Comfort+ (or higher). [if Money]
			First/Business I (or higher). [if Money]

	Flights Operated By:
			Delta. [if Miles]
			Delta&. [if Miles]

