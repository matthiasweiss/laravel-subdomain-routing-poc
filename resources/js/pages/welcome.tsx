import { Link } from '@inertiajs/react';
import test from '../routes/test';

export default function Welcome({ account }: { account: string }) {
    return (
        <>
            <h1>{account}</h1>

            <Link href={test.index({ account: 'account1' })}>
                Go to account 1
            </Link>
            <Link href={test.index({ account: 'account2' })}>
                Go to account 2
            </Link>
        </>
    );
}
