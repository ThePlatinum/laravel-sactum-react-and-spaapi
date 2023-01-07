import GuestLayout from '@/Layouts/GuestLayout';
import { Head } from '@inertiajs/inertia-react';

export default function Welcome(props) {
  return (
    <GuestLayout>
      <Head title="Welcome" />
    </GuestLayout>
  );
}
