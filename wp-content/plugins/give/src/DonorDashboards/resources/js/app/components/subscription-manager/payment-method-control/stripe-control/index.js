import { Elements } from '@stripe/react-stripe-js';
import { loadStripe } from '@stripe/stripe-js';
import { useState, useEffect } from 'react';

import StripeCardControl from './stripe-card-control';

const StripeControl = ( { gateway, label, forwardedRef } ) => {
	const [ stripePromise, setStripePromise ] = useState( null );

	useEffect( () => {
		setStripePromise( loadStripe(
			gateway.publishableKey,
			{stripeAccount: gateway.accountId}
		) );
	}, [] );

	const fonts = [ {
		src: 'url(https://fonts.googleapis.com/css2?family=Montserrat:wght@500)',
		family: 'Montserrat',
	} ];

	return (
		<Elements stripe={ stripePromise } fonts={ fonts }>
			<StripeCardControl
				forwardedRef={ forwardedRef }
				label={ label }
			/>
		</Elements>
	);
};

export default StripeControl;
