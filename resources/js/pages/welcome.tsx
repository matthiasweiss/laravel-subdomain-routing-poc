import test from '../routes/test';

export default function Welcome({ account }: { account: string }) {
    return (
        <>
            <h1>{account}</h1>

            <a href={test.index({ account: 'account1' }).url}>
                Go to account 1
            </a>

            <a href={test.index({ account: 'account2' }).url}>
                Go to account 2
            </a>
        </>
    );
}
