# -*- coding: utf-8 -*- #
# Copyright 2018 Google Inc. All Rights Reserved.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#    http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
"""Command to add an IAM policy binding for an attestor."""

from __future__ import absolute_import
from __future__ import division
from __future__ import unicode_literals

from googlecloudsdk.api_lib.container.binauthz import apis
from googlecloudsdk.api_lib.container.binauthz import iam
from googlecloudsdk.calliope import base
from googlecloudsdk.command_lib.container.binauthz import flags
from googlecloudsdk.command_lib.iam import iam_util


class AddIamPolicyBinding(base.Command):
  r"""Add IAM policy binding to an attestor.

  See https://cloud.google.com/iam/docs/managing-policies for details of
  policy role and member types.

  ## EXAMPLES
  The following command will add an IAM policy binding for the role of
  'roles/binaryauthorization.attestorsEditor' for the user
  'test-user@gmail.com' on the attestor `my_attestor`:

    $ {command} my_attestor \
        --member='user:test-user@gmail.com' \
        --role='roles/binaryauthorization.attestorsEditor'
  """
  # The above text based on output from
  # iam_util.GetDetailedHelpForAddIamPolicyBinding.

  @staticmethod
  def Args(parser):
    flags.AddConcepts(
        parser,
        flags.GetAttestorPresentationSpec(
            positional=True,
            group_help='The attestor whose IAM policy will be modified.',
        ),
    )
    iam_util.AddArgsForAddIamPolicyBinding(parser)

  def Run(self, args):
    attestor_ref = args.CONCEPTS.attestor.Parse()
    return iam.Client(apis.V1_BETA1).AddBinding(
        attestor_ref, args.member, args.role)
