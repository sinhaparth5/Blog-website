import NavBar from '@/Components/NavBar';
import { PageProps } from '@/types';
import { Head, Link } from '@inertiajs/react';
import { Theme } from '@radix-ui/themes';

export default function Welcome({
    auth,
    laravelVersion,
    phpVersion,
}: PageProps<{ laravelVersion: string; phpVersion: string }>) {
    const handleImageError = () => {
        document
            .getElementById('screenshot-container')
            ?.classList.add('!hidden');
        document.getElementById('docs-card')?.classList.add('!row-span-1');
        document
            .getElementById('docs-card-content')
            ?.classList.add('!flex-row');
        document.getElementById('background')?.classList.add('!hidden');
    };

    return (
        <>
            <Head title="Welcome" />
            <Theme>
                <NavBar />
            </Theme>
        </>
    );
}
